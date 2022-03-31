
<?php
  foreach ($_GET as $arg)
  {
      if (is_numeric($arg))
      {
          if (strpos($arg,'.'))
          {
              echo "$arg - дробное;<br>";
          }
          else
          {
              echo "$arg - целое;<br>";
          }
      }
      else
      {
          echo "$arg - строка;<br>";
      }
  }
  ?>