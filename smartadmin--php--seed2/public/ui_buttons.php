<?php

require_once 'init.php';

$_title = 'Buttons - UI Components - SmartAdmin v4.0.2';
$_active_nav = 'ui_buttons';
$_head = '';
$_description = 'Use custom button styles for actions in forms, dialogs, and more. Includes support for a handful of contextual variations, sizes, states, and more.';

?>
<!DOCTYPE html>
<!-- 
Template Name:: SmartAdmin PHP 7 Responsive WebApp - Template built with Bootstrap 4 and PHP 7
Version: 4.0.2
Author: Jovanni Lo
Website: https://smartadmin.lodev09.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <?php include_once APP_PATH.'/includes/head.php'; ?>
    <body class="mod-bg-1 ">
        <?php include_once APP_PATH.'/includes/theme.php'; ?>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <?php include_once APP_PATH.'/includes/nav.php'; ?>
                <div class="page-content-wrapper">
                    <?php include_once APP_PATH.'/includes/header.php'; ?>
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">UI Components</li>
                            <li class="breadcrumb-item active">Buttons</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Buttons
                                <small>
                                    Use custom button styles for actions in forms, dialogs, and more. Includes support for a handful of contextual variations, sizes, states, and more.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <!--Button colors-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Button <span class="fw-300"><i>Colors</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                SmartAdmin for PHP includes nine predefined button styles, each serving its own semantic purpose.
                                            </div>
                                            <h5 class="frame-heading">
                                                Default
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-info">Info</button>
                                                    <button type="button" class="btn btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-dark">Dark</button>
                                                    <button type="button" class="btn btn-light">Light</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Rounded
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-primary btn-pills">Primary</button>
                                                    <button type="button" class="btn btn-secondary btn-pills">Secondary</button>
                                                    <button type="button" class="btn btn-success btn-pills">Success</button>
                                                    <button type="button" class="btn btn-info btn-pills">Info</button>
                                                    <button type="button" class="btn btn-warning btn-pills">Warning</button>
                                                    <button type="button" class="btn btn-danger btn-pills">Danger</button>
                                                    <button type="button" class="btn btn-dark btn-pills">Dark</button>
                                                    <button type="button" class="btn btn-light btn-pills">Light</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Unique style
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-default">Default</button>
                                                    <button type="button" class="btn btn-default btn-pills">Default</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Block <span class="fw-300"><i>Buttons</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="frame-wrap text-center mb-0">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="demo-v-spacing">
                                                                    <button type="button" class="btn btn-primary btn-lg btn-block">Block
                                                                        <span>large</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary btn-block">Block
                                                                        <span>default</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary btn-sm btn-block">Block
                                                                        <span>small</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary btn-xs btn-block">Block
                                                                        <span>extra small</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="demo-v-spacing mt-3 mt-xl-0">
                                                                    <button type="button" class="btn btn-success btn-pills btn-lg btn-block">Block
                                                                        <span>large</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-pills btn-block">Block
                                                                        <span>default</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-pills btn-sm btn-block">Block
                                                                        <span>small</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-success btn-pills btn-xs btn-block">Block
                                                                        <span>extra small</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Sizes-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Option <span class="fw-300"><i>Sizes</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Alter button sizes by using the classes <code>.btn-lg</code>, <code>.btn-sm</code>, <code>.btn-xs</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Largest size
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-lg btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-lg btn-default">Default</button>
                                                    <button type="button" class="btn btn-lg btn-success">Success</button>
                                                    <button type="button" class="btn btn-lg btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-lg btn-info">Info</button>
                                                    <button type="button" class="btn btn-lg btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-lg btn-dark">Dark</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Default size
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-default">Default</button>
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-info">Info</button>
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-dark">Dark</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Small size
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-sm btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-sm btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-sm btn-default">Default</button>
                                                    <button type="button" class="btn btn-sm btn-success">Success</button>
                                                    <button type="button" class="btn btn-sm btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-sm btn-info">Info</button>
                                                    <button type="button" class="btn btn-sm btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-sm btn-dark">Dark</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Smallest size
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-xs btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-xs btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-xs btn-default">Default</button>
                                                    <button type="button" class="btn btn-xs btn-success">Success</button>
                                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-xs btn-info">Info</button>
                                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-xs btn-dark">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--With icons-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Button <span class="fw-300"><i>with Icons</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                We use the icon tags to insert icons into buttons
                                            </div>
                                            <div class="demo">
                                                <button type="button" class="btn btn-lg btn-primary">
                                                    <span class="fal fa-print mr-1"></span>
                                                    Print
                                                </button>
                                                <button type="button" class="btn btn-lg btn-secondary">
                                                    <span class="fal fa-volume-mute mr-1"></span>
                                                    Mute
                                                </button>
                                                <button type="button" class="btn btn-lg btn-default">
                                                    <span class="fal fa-check mr-1"></span>
                                                    Submit
                                                </button>
                                                <button type="button" class="btn btn-lg btn-success">
                                                    <span class="fal fa-download mr-1"></span>
                                                    Download
                                                </button>
                                                <button type="button" class="btn btn-lg btn-warning">
                                                    <span class="fal fa-exclamation-triangle mr-1"></span>
                                                    Scan Device
                                                </button>
                                                <button type="button" class="btn btn-lg btn-info">
                                                    <span class="fal fa-bug mr-1"></span>
                                                    Report Bug
                                                </button>
                                                <button type="button" class="btn btn-lg btn-danger">
                                                    <span class="fal fa-times mr-1"></span>
                                                    Delete
                                                </button>
                                                <button type="button" class="btn btn-lg btn-dark">
                                                    <span class="fal  fa-eject mr-1"></span>
                                                    Eject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Icon buttons-->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Icons <span class="fw-300"><i>example</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Convert button to an icon button by adding the class <code>.btn-icon</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Various sizes
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-lg btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-lg btn-icon">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-lg btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-lg btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-lg btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-lg btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-lg btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-lg btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-sm btn-icon">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-sm btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-sm btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-sm btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-sm btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-sm btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-xs btn-icon">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-xs btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-xs btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-xs btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-xs btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-xs btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Rounded
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                                <div class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-default btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-warning btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-info btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-dark btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Hover dot effect
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-lg btn-icon rounded-circle hover-effect-dot">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-lg btn-icon rounded-circle hover-effect-dot">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-success btn-lg btn-icon hover-effect-dot">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <!--Button colors (outline)-->
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Button <span class="fw-300"><i>Outlines</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Replace the default modifier classes with<code>.btn-outline-*</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Outline
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                                    <button type="button" class="btn btn-outline-light">Light</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Rounded outline
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-outline-primary btn-pills">Primary</button>
                                                    <button type="button" class="btn btn-outline-secondary btn-pills">Secondary</button>
                                                    <button type="button" class="btn btn-outline-success btn-pills">Success</button>
                                                    <button type="button" class="btn btn-outline-info btn-pills">Info</button>
                                                    <button type="button" class="btn btn-outline-warning btn-pills">Warning</button>
                                                    <button type="button" class="btn btn-outline-danger btn-pills">Danger</button>
                                                    <button type="button" class="btn btn-outline-dark btn-pills">Dark</button>
                                                    <button type="button" class="btn btn-outline-light btn-pills">Light</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Unique style
                                            </h5>
                                            <div class="frame-wrap mb-0">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-outline-default">Default</button>
                                                    <button type="button" class="btn btn-outline-default btn-pills">Default</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Block (outline)-->
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Block <span class="fw-300"><i>Outlines</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Block buttons inherits outline button properties <code>.btn-outline-*</code>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="frame-wrap text-center mb-0">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="demo-v-spacing">
                                                                    <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block
                                                                        <span>large</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-primary btn-block">Block
                                                                        <span>default</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-primary btn-sm btn-block">Block
                                                                        <span>small</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-primary btn-xs btn-block">Block
                                                                        <span>extra small</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="demo-v-spacing mt-3 mt-xl-0">
                                                                    <button type="button" class="btn btn-outline-success btn-pills btn-lg btn-block">Block
                                                                        <span>large</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-success btn-pills btn-block">Block
                                                                        <span>default</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-success btn-pills btn-sm btn-block">Block
                                                                        <span>small</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-success btn-pills btn-xs btn-block">Block
                                                                        <span>extra small</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Sizes (outline)-->
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Option <span class="fw-300"><i>Sizes</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Alter button sizes by using the classes <code>.btn-lg</code>, <code>.btn-sm</code>, <code>.btn-xs</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Largest size
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <button type="button" class="btn btn-lg btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-lg btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-lg btn-outline-default">Default</button>
                                                    <button type="button" class="btn btn-lg btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-lg btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-lg btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-lg btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-lg btn-outline-dark">Dark</button>
                                                </p>
                                            </div>
                                            <h5 class="frame-heading">
                                                Default size
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-outline-default">Default</button>
                                                    <button type="button" class="btn btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                                </p>
                                            </div>
                                            <h5 class="frame-heading">
                                                Small size
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <button type="button" class="btn btn-sm btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-sm btn-outline-default">Default</button>
                                                    <button type="button" class="btn btn-sm btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-sm btn-outline-dark">Dark</button>
                                                </p>
                                            </div>
                                            <h5 class="frame-heading">
                                                Smallest size
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <button type="button" class="btn btn-xs btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-xs btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-xs btn-outline-default">Default</button>
                                                    <button type="button" class="btn btn-xs btn-outline-success">Success</button>
                                                    <button type="button" class="btn btn-xs btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-xs btn-outline-info">Info</button>
                                                    <button type="button" class="btn btn-xs btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-xs btn-outline-dark">Dark</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--With icons (outline)-->
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Button <span class="fw-300"><i>with Icons</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                We use the icon tags to insert icons into buttons
                                            </div>
                                            <div class="demo">
                                                <button type="button" class="btn btn-lg btn-outline-primary">
                                                    <span class="fal fa-print mr-1"></span>
                                                    Print
                                                </button>
                                                <button type="button" class="btn btn-lg btn-outline-secondary">
                                                    <span class="fal fa-volume-mute mr-1"></span>
                                                    Mute
                                                </button>
                                                <button type="button" class="btn btn-lg btn-outline-default">
                                                    <span class="fal fa-check mr-1"></span>
                                                    Submit
                                                </button>
                                                <button type="button" class="btn btn-lg btn-outline-success">
                                                    <span class="fal fa-download mr-1"></span>
                                                    Download
                                                </button>
                                                <button type="button" class="btn btn-lg btn-outline-warning">
                                                    <span class="fal fa-exclamation-triangle mr-1"></span>
                                                    Scan Device
                                                </button>
                                                <button type="button" class="btn btn-lg btn-outline-info">
                                                    <span class="fal fa-bug mr-1"></span>
                                                    Report Bug
                                                </button>
                                                <button type="button" class="btn btn-lg btn-outline-danger">
                                                    <span class="fal fa-times mr-1"></span>
                                                    Delete
                                                </button>
                                                <button type="button" class="btn btn-lg btn-outline-dark">
                                                    <span class="fal  fa-eject mr-1"></span>
                                                    Eject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Icon buttons (outline)-->
                                <div id="panel-10" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Icon <span class="fw-300"><i>Outlined</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Convert button to an icon button by adding the class <code>.btn-icon</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Various sizes
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-lg btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-lg btn-icon">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-lg btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-lg btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-lg btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-lg btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-lg btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-lg btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-icon">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-sm btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm btn-icon">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-sm btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-sm btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-sm btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-sm btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-sm btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-sm btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-xs btn-icon">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-xs btn-icon">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-xs btn-icon">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-xs btn-icon">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-xs btn-icon">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-xs btn-icon">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-xs btn-icon">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-xs btn-icon">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <h5 class="frame-heading">
                                                Rounded outline
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-lg btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-sm btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-volume-mute"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-default btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-check"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-warning btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-exclamation-triangle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-info btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-bug"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-danger btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-xs btn-icon rounded-circle">
                                                        <i class="fal fa-eject"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <h5 class="frame-heading">
                                                Hover dot effect
                                            </h5>
                                            <div class="frame-wrap">
                                                <p class="demo">
                                                    <a href="javascript:void(0);" class="btn btn-outline-primary btn-lg btn-icon rounded-circle hover-effect-dot">
                                                        <i class="fal fa-print"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-lg btn-icon rounded-circle hover-effect-dot">
                                                        <i class="fal fa-volume-mute fs-md"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-success btn-lg btn-icon hover-effect-dot">
                                                        <i class="fal fa-download"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- END Page Content -->
                    <?php include_once APP_PATH.'/includes/footer.php'; ?>
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <?php include_once APP_PATH.'/includes/extra.php'; ?>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
    </body>
</html>
