<?php
require 'Documentable.php';
require 'DocumentStore.php';
require 'HtmlDocument.php';
require 'StreamDocument.php';
require 'CommandOutputDocument.php';

$documentStore = new DocumentStore();

// Add HTML document
$htmlDoc = new HtmlDocument('http://php.net');
//$documentStore->addDocument($htmlDoc);

// Add stream document
$streamDoc = new StreamDocument(fopen('stream.txt', 'rb'));
$documentStore->addDocument($streamDoc);

// Add terminal command document
// $cmdDoc = new CommandOutputDocument('cat /etc/hosts');
$cmdDoc = new CommandOutputDocument('php -version');
$documentStore->addDocument($cmdDoc);

print_r($documentStore->getDocuments());
