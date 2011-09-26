<?

// get referrer domain
$referrer_dirs  = explode('/', $_SERVER['HTTP_REFERER']);
$domain         = str_replace('www.', '', $referrer_dirs[2]);

// mail link
$mail_subject = rawurlencode('Bad dropbox link on ' . $domain);
$mail_message = rawurlencode('I clicked it at: ' . $_SERVER['HTTP_REFERER']);
$mail_link    = 'mailto:name@email.com?subject=' . $mail_subject .
                '&body=' . $mail_message;
?>
<html>
  <head>
    <title>YOUR NAME | Dropbox</title>
    <style>
      body {
        font-family: "Segoe UI", "Lucida Grande", "Tahoma", sans;
        margin: 40px 150px;
        width: 400px;
        line-height: 18px;
        font-size: 13px;
      }

      h3 {
        color: #333;
        font-size: 16px;
      }

      h3.dropbox {
        background-image: url(_db.png);
        background-repeat: no-repeat;
        position: relative;
        left: -24px;
        padding-left: 24px;
      }

      a {
        color: #3b5998;
        text-decoration: none;
      }

      a.hidden {
        color: #000;
        font-style: italic;
        text-decoration: none;
      }

      a:hover {
        color: #3b5998;
        text-decoration: underline;
      }

    </style>
  </head>
  <body>
    <h3 class="dropbox">Dropbox</h3>

    <p>This is the personal dropbox of Lee Byron.</p>

    <? if ($_SERVER['REQUEST_URI'] != "/") { ?>

      <p>You were linked here from another website, <a href="<?=$_SERVER['HTTP_REFERER']?>" class="hidden"><?=$domain?></a>, who may be abusing the fact that I have files available to the public. You can let me know, please <a href="<?=$mail_link?>">send me a message</a>.</p>

      <p><b>
        Anyway, you were probably after this:
        <a href="/<?=$_GET['file']?>"><?=$_GET['file']?></a>
      </b></p>

    <? } ?>

    <p>Do you have a <a href="https://www.dropbox.com/referrals/REFERAL_LINK">dropbox</a>?
  </body>
</html>