<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>UCB Email Template</title>
   <link rel="stylesheet" type="text/css" href="screen.css">
</head>
<body>

<?php if ($styles): ?>
<style>
<?php print $styles; ?>
</style>
<?php endif; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
      <td align="center">

         
         <table width="580" border="0" cellspacing="0" cellpadding="0">
            <tr>
               <td class="permission">
                  <p><?php print $disclaimer; ?></p>
               </td>
            </tr>
         </table>
         
         <table width="580" border="0" cellspacing="0" cellpadding="0">
            <tr>
               <td align="center">
                  
                  <table width="580" height="19" border="0" cellspacing="0" cellpadding="0" class="header-top">
                     <tr>
                        <td><?php print theme('image', drupal_get_path('module', 'newsletter') .'/images/top.jpg'); ?></td>

                     </tr>
                  </table>
                  
               </td>
            </tr>
         </table>
         
         <table width="580" border="0" cellspacing="0" cellpadding="0">
            <tr>
               <td align="center">
                  
                  <table width="580" height="127" border="0" cellspacing="0" cellpadding="0" class="header">

                     <tr>
                        <td><?php print $header; ?></td>
                     </tr>
                  </table>
                  
               </td>
            </tr>
         </table>
         
         <table width="580" border="0" cellspacing="0" cellpadding="0" class="bg">
            <tr>

               <td width="392" align="center" valign="top">
                  <table width="100%" border="0" cellspacing="16" cellpadding="0">
                     <tr>
                        <td align="left" class="mainbar">
                          <?php print $content ?>
                        </td>
                     </tr>
                  </table>
                  
               </td>
               
               <td width="188" align="center" valign="top" class="sidebar">
                  <table width="100%" border="0" cellspacing="16" cellpadding="0">
                     <tr>

                        <td align="left">

                           <?php print $sidebar; ?>

                        </td>

                     </tr>
                  </table>
               </td>
            </tr>
         </table>
         
         <table width="580" border="0" cellspacing="0" cellpadding="0">
            <tr>
               <td align="center">
                  
                  <table width="580" height="94" border="0" cellspacing="0" cellpadding="0" class="footer">

                     <tr>
                        <td align="center"><p><?php print $footer; ?></p></td>
                     </tr>
                     
                     <tr>
                        <td><?php print theme('image', drupal_get_path('module', 'newsletter') .'/images/bottom.jpg'); ?></td>
                     </tr>
                  </table>

                  
                  <table width="580" border="0" cellspacing="0" cellpadding="0" class="bottom">
                     <tr>
                        <td align="center"><?php print $closure; ?></td>
                     </tr>
                  </table>
                  
               </td>

            </tr>
         </table>
         
      </td>
   </tr>
</table>

</body>
</html>
