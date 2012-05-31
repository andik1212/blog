<?php

/**
 * main actions.
 *
 * @package    blog
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->blog_postss = Doctrine_Core::getTable('blogPosts')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->blog_posts = Doctrine_Core::getTable('blogPosts')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->blog_posts);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new blogPostsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new blogPostsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($blog_posts = Doctrine_Core::getTable('blogPosts')->find(array($request->getParameter('id'))), sprintf('Object blog_posts does not exist (%s).', $request->getParameter('id')));
    $this->form = new blogPostsForm($blog_posts);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($blog_posts = Doctrine_Core::getTable('blogPosts')->find(array($request->getParameter('id'))), sprintf('Object blog_posts does not exist (%s).', $request->getParameter('id')));
    $this->form = new blogPostsForm($blog_posts);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($blog_posts = Doctrine_Core::getTable('blogPosts')->find(array($request->getParameter('id'))), sprintf('Object blog_posts does not exist (%s).', $request->getParameter('id')));
    $blog_posts->delete();

    $this->redirect('main/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $blog_posts = $form->save();

      $this->redirect('main/edit?id='.$blog_posts->getId());
    }
  }
}
