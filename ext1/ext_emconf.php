<?php

/*********************************************************************
* Extension configuration file for ext "ext1".
*
* Generated by ext 28-03-2013 09:13 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'ext - a command-line client for ter',
  'description' => 'ext is currently focused on extension upload from command-line.',
  'author' => 'Elmar Hinz, Tobias Liebig, et al.',
  'author_email' => 't3elmar@googlemail.com',
  'category' => 'misc',
  'state' => 'alpha',
  'user' => 't3elmar',
  'version' => '1.4.0',
  'dependencies' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '4.0.0-10.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:60:{s:9:"README.md";s:4:"34bf";s:19:"Cool/ext_emconf.php";s:4:"b8b8";s:15:"Cool/README.rst";s:4:"c735";s:20:"Cool/Cache/dummy.txt";s:4:"d41d";s:28:"Cool/Configuration/dummy.txt";s:4:"d41d";s:28:"Cool/Documentation/README.md";s:4:"7743";s:40:"Cool/Modules/Cool/Classes/AutoLoader.php";s:4:"0980";s:39:"Cool/Modules/Cool/Classes/Container.php";s:4:"ea5e";s:56:"Cool/Modules/Cool/Classes/DedicatedDirectoriesLoader.php";s:4:"17cd";s:36:"Cool/Modules/Cool/Classes/Finder.php";s:4:"303b";s:36:"Cool/Modules/Cool/Classes/Loader.php";s:4:"ae86";s:44:"Cool/Modules/Cool/Classes/LoadTestHelper.php";s:4:"5ffe";s:40:"Cool/Modules/Cool/Interfaces/Service.php";s:4:"2a69";s:42:"Cool/Modules/Cool/Interfaces/Singleton.php";s:4:"0672";s:43:"Cool/Modules/Cool/Services/DummyService.php";s:4:"4e7f";s:42:"Cool/Modules/Cool/Tests/AutoLoaderTest.php";s:4:"314a";s:41:"Cool/Modules/Cool/Tests/ContainerTest.php";s:4:"97eb";s:58:"Cool/Modules/Cool/Tests/DedicatedDirectoriesLoaderTest.php";s:4:"1a9e";s:38:"Cool/Modules/Cool/Tests/FinderTest.php";s:4:"01d3";s:38:"Cool/Modules/Cool/Tests/LoaderTest.php";s:4:"2f8a";s:26:"Cool/Modules/Ext/ChangeLog";s:4:"3e92";s:28:"Cool/Modules/Ext/License.txt";s:4:"2116";s:26:"Cool/Modules/Ext/README.md";s:4:"2db8";s:45:"Cool/Modules/Ext/Classes/ExtensionContext.php";s:4:"b6b5";s:49:"Cool/Modules/Ext/Classes/PropertyActionHelper.php";s:4:"4ebb";s:38:"Cool/Modules/Ext/Configuration/Ext.php";s:4:"120f";s:45:"Cool/Modules/Ext/Interfaces/ActionService.php";s:4:"de51";s:59:"Cool/Modules/Ext/Interfaces/ExtensionContextSensitivity.php";s:4:"5201";s:45:"Cool/Modules/Ext/Interfaces/WorkerService.php";s:4:"509e";s:36:"Cool/Modules/Ext/Services/Action.php";s:4:"8066";s:51:"Cool/Modules/Ext/Services/GeneralPropertyAction.php";s:4:"9144";s:43:"Cool/Modules/Ext/Services/InstallAction.php";s:4:"77ab";s:40:"Cool/Modules/Ext/Services/ListAction.php";s:4:"6dd5";s:40:"Cool/Modules/Ext/Services/MainAction.php";s:4:"af98";s:50:"Cool/Modules/Ext/Services/SharedPropertyAction.php";s:4:"9f20";s:39:"Cool/Modules/Ext/Services/TerAction.php";s:4:"090a";s:43:"Cool/Modules/Ext/Services/TerInfoAction.php";s:4:"ed94";s:42:"Cool/Modules/Ext/Services/UploadAction.php";s:4:"2fff";s:36:"Cool/Modules/Ext/Services/Worker.php";s:4:"e888";s:37:"Cool/Modules/Ext/Tests/ActionTest.php";s:4:"7b16";s:47:"Cool/Modules/Ext/Tests/ExtensionContextTest.php";s:4:"6637";s:41:"Cool/Modules/Ext/Tests/ListActionTest.php";s:4:"f79d";s:41:"Cool/Modules/Ext/Tests/MainActionTest.php";s:4:"15ec";s:51:"Cool/Modules/Ext/Tests/PropertyActionHelperTest.php";s:4:"71f4";s:37:"Cool/Modules/Ext/Tests/WorkerTest.php";s:4:"89d1";s:24:"Cool/Modules/Ext/bin/ext";s:4:"09b7";s:48:"Cool/Modules/Typo3ExtensionUtils/pharVersion.txt";s:4:"5707";s:42:"Cool/Modules/Typo3ExtensionUtils/README.md";s:4:"e950";s:51:"Cool/Modules/Typo3ExtensionUtils/bin/createPhar.php";s:4:"a1f7";s:50:"Cool/Modules/Typo3ExtensionUtils/bin/t3xutils.phar";s:4:"904a";s:49:"Cool/Modules/Typo3ExtensionUtils/bin/t3xutils.php";s:4:"8e81";s:49:"Cool/Modules/Typo3ExtensionUtils/lib/autoload.php";s:4:"d251";s:72:"Cool/Modules/Typo3ExtensionUtils/lib/etobi/extensionUtils/Dispatcher.php";s:4:"71c8";s:87:"Cool/Modules/Typo3ExtensionUtils/lib/etobi/extensionUtils/Controller/SelfController.php";s:4:"9e4d";s:86:"Cool/Modules/Typo3ExtensionUtils/lib/etobi/extensionUtils/Controller/T3xController.php";s:4:"54f5";s:86:"Cool/Modules/Typo3ExtensionUtils/lib/etobi/extensionUtils/Controller/TerController.php";s:4:"846f";s:72:"Cool/Modules/Typo3ExtensionUtils/lib/etobi/extensionUtils/ter/Helper.php";s:4:"aaed";s:70:"Cool/Modules/Typo3ExtensionUtils/lib/etobi/extensionUtils/ter/Soap.php";s:4:"4c7d";s:75:"Cool/Modules/Typo3ExtensionUtils/lib/etobi/extensionUtils/ter/TerUpload.php";s:4:"7eb8";s:14:"doc/manual.sxw";s:4:"1505";}',
  'comment' => 'change status command to state to match TER requirements',
);

?>