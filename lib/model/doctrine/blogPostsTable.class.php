<?php

/**
 * blogPostsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class blogPostsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object blogPostsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('blogPosts');
    }
}