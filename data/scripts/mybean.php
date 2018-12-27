<?php

  import com.chexindata.beans.MyBean;

  $bean = new MyBean(123);

  var_dump($bean);
  var_dump($bean->value);
  var_dump($bean->makeMessage());
?>