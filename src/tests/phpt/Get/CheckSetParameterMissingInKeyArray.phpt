--TEST--
Get - NameSpace Parameter missing in key array.

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Get", "testCheckSetParameterMissingInKeyArray");
--EXPECT--
ERR_PARAM
