<?php

namespace App;

use Sober\Controller\Controller;

class Writing extends Controller
{
    public static function writingString( $writingArray )
    {
        $writingString = '';

        $url_of_article = $writingArray['article_url'];
        $title_of_article = $writingArray['title_of_article'];
        $article_date = $writingArray['article_date'];
        $publication_name = $writingArray['publication_name'];
        $publication_url = $writingArray['publication_url'];

        //check if url is present if so add anchor tag
        $writingString .= ( isset( $url_of_article ) ) ? "<a href=\"${url_of_article}\" target=\"_blank\" rel=\"external\">" : '';

        $writingString .= $title_of_article;
        $writingString .= ( isset( $url_of_article ) ) ? '</a>' : '';

        //add date to article comma goes with date
        $writingString .= ( isset( $article_date ) ) ? ", ${article_date}" : '';

        //add publication with article em dash goes with publication_name
        $writingString .= ( isset( $publication_url ) && isset( $publication_name ) ) ? " &mdash; <a href=\"${publication_url}\" target=\"_blank\" rel=\"external\">" : '';
        $writingString .= ( isset( $publication_name ) ) ? $publication_name : '';
        $writingString .= ( isset( $publication_url ) && isset( $publication_name ) ) ? "</a>" : '';

        return $writingString;
    }

}
