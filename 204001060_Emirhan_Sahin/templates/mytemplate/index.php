<?php defined('_JEXEC') or die('Restricted access'); ?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>

<body>
    <div class="main">
        <div class="makale">
            <jdoc:include type="component" />
        </div>

        <div class="sag-menu">
            <jdoc:include type="modules" name="right" />
        </div>

        <div class="breadcrumb">
            <jdoc:include type="modules" name="breadcrumbs" />
        </div>

        <jdoc:include type="modules" name="footer" />
    </div>
</body>

</html>