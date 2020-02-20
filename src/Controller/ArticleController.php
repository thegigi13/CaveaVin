<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ArticleController extends AbstractController
{
    public function index()
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('article/index.html.twig',
            ['articles' => $articles]
        );
    }

    /**
     * $IsGranted("ROLE_USER")
     *
     * @Security("is_granted('ROLE_USER')")
     */
    public function add(Request $request)  // ajouter un article
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article->setLastUpdateDate(new \DateTime());

            if ($article->getPicture() !== null){
                $file =$form->get('picture')->getData();
                $fileName = uniqid(). '.' .$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'), // le dossier dans le quel le fichier vas etre charger
                        $fileName
                    );
                    
                } catch (FileException $e) {
                    return new Reponse($e->getMessage());
                }
                $article->setPicture($fileName);
            }

            if ($article->getIsPublished()){
                $article->setPublicationDate(new \DateTime());
            }

            $em = $this->getDoctrine()->getManager();  // On récupère l'entity manager
            $em->persist($article); // On confie nore entité à l'entity manager (on persist l'entité)
            $em->flush(); // On execute la requete

            return new Response('L\'article a bien été enregisté .');
        }

    	return $this->render('article/add.html.twig', [
            'form' => $form->createView()
            ]);
    }

    public function show(Article $article)
    {
    	return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }

    public function edit(Article $article, request $request)
    {
        $oldPicture = $article->getPicture();

        $form = $this->createForm(ArticleType::class , $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $article->setLastUpdateDate(new \DateTime());

            if ($article->getIsPublished()){
                $article->setPublicationDate(new \DateTime());
            }

            if ($article->getPicture() !== null && $article->getPicture() !== $oldPicture){
                $file = $form->get('picture')->getData();
                $fileName = uniqid().'.'.$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }
                $article->setPicture($fileName);
            } else {
                $article->setPicture($oldPicture);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return new Response('L\' article a été modifié avec succes. ');
        }
    	//  $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView()
        ]);
    }

    public function remove($id)
    {
    	$constante = "<h1>Suppression de l'article : " .$id. "</h1>";
    	return new Response($constante);
    }
}
