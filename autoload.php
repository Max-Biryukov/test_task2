<?php

function __autoload( $class )
{

	if( file_exists( __DIR__  . '/' . $class . '.php') ){
	    require __DIR__  . '/' . $class . '.php';
	}
}