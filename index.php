<?php
//include 'editor.php';
$main = file_get_contents('editor.php');

//search for html files in 4uhost-template, demo, Atlas-template, convid-template, digitf-template, dozecafe-template, drool-template, goind-template, honey-template, restaurant-template, seo-webiste-template folders
$htmlFiles = glob("{drool-template}/**/*.html", GLOB_BRACE);
$files = '';
foreach ($htmlFiles as $file) { 
   if (in_array($file, array('new-page-blank-template.html', 'editor.php'))) continue;//skip template files
   $pathInfo = pathinfo($file);
   $filename = $pathInfo['filename'];
   $folder = preg_replace('@/.+?$@', '', $pathInfo['dirname']);
   $subfolder = preg_replace('@^.+?/@', '', $pathInfo['dirname']);
   if ($filename == 'index' && $subfolder) {
	   $filename = $subfolder;
   }
   $url = $pathInfo['dirname'] . '/' . $pathInfo['basename'];
   $name = ucfirst($filename);

  $files .= "{name:'$name', file:'$file', title:'$name',  url: '$url', folder:'$folder'},";
} 

if(isset($_GET['project_title']) && isset($_GET['project_folder'])){
  $project_title = $_GET['project_title'];
  $project_folder = $_GET['project_folder'];
  // if project folder does not exist then create it else do nothing
  if (!is_dir($project_folder)){
    mkdir($project_folder);
  }

  // create project file in project folder
  $project_file = fopen($project_folder . '/'.$project_title.'.html', 'w');
  fwrite($project_file, $project_title);
  fclose($project_file);
  $project_url = $project_folder . '/'.$project_title.'.html';

  $files .= "{name:'$project_title', file:'$project_folder', title:'$project_title',  url: '$project_url', folder:'$project_folder'},";

  
}
//replace files list from html with the dynamic list from demo folder
$main = str_replace('(pages);', "([$files]);", $main);

echo $main;

