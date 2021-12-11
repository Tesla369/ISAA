<?php
  $headervalue = 'X-XSS-Protection: 0';
  header($headervalue);
?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <style>
          p {
            margin-left: 10%;
            margin-right: 10%;
          }
        </style>
    </head>
    <body>
      <h1>Magic Link</h1>
          <a href="?tagName=foo">CLICK THIS MAGIC LINK</a>
<?php
          if (isset($_REQUEST['tagName'])) {
            echo "<" . htmlspecialchars($_REQUEST['tagName']) . ">&nbsp;</" . htmlspecialchars($_REQUEST['tagName']) . ">";
          }
        ?>

        <div <?php if (isset($_REQUEST['attributeName'])) { echo $_REQUEST['attributeName'] . "=\"\""; } ?>>&nbsp;</div>

        <div custAttr='<?php if (isset($_REQUEST['singleQuotedAttributeValue'])) { echo $_REQUEST['singleQuotedAttributeValue']; } ?>'>&nbsp;</div>
        <div custAttr="<?php if (isset($_REQUEST['doubleQuotedAttributeValue'])) { echo $_REQUEST['doubleQuotedAttributeValue']; } ?>">&nbsp;</div>
        <div custAttr=<?php if (isset($_REQUEST['unquotedAttributeValue'])) { echo $_REQUEST['unquotedAttributeValue']; } ?>>&nbsp;</div>

        <?php if (isset($_REQUEST['urlencodeuri'])) { echo $_SERVER['REQUEST_URI']; } ?>

        <?php if (isset($_REQUEST['html'])) { echo $_REQUEST['html']; } ?>

        <?php if (isset($_REQUEST['ahref'])) { echo "<a href=\"".$_REQUEST['ahref']."\">".$_REQUEST['ahref']."</a>"; } ?>

        <!-- <?php if (isset($_REQUEST['htmlComment'])) { echo $_REQUEST['htmlComment']; } ?> -->

        <style><?php if (isset($_REQUEST['styleTag'])) { echo $_REQUEST['styleTag']; } ?></style>

        <div style="<?php if (isset($_REQUEST['styleAttribute'])) { echo $_REQUEST['styleAttribute']; } ?>">&nbsp;</div>

        <div id="<?php if (isset($_REQUEST['idAttribute'])) { echo $_REQUEST['idAttribute']; } ?>">&nbsp;</div>

        <div class="<?php if (isset($_REQUEST['classAttribute'])) { echo $_REQUEST['classAttribute']; } ?>">&nbsp;</div>
      </div>
      <script>

        var singleQuotedString = '<?php if (isset($_REQUEST['jsSingleQuotedString'])) { echo $_REQUEST['jsSingleQuotedString']; } ?>';
        var doubleQuotedString = "<?php if (isset($_REQUEST['jsDoubleQuotedString'])) { echo $_REQUEST['jsDoubleQuotedString']; } ?>";

        // <?php if (isset($_REQUEST['jsSingleLineComment'])) { echo $_REQUEST['jsSingleLineComment']; } ?>

        /* <?php if (isset($_REQUEST['jsMultiLineComment'])) { echo $_REQUEST['jsMultiLineComment']; } ?> */

        <?php if (isset($_REQUEST['js'])) { echo $_REQUEST['js']; } ?>;
      </script>
    </body>
</html>
