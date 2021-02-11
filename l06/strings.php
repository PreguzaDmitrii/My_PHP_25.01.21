<?php
echo '1';
print 'ooo';
print PHP_EOL;

$name = 'Dmitrii';
echo 'Hello $name\n', PHP_EOL;
echo "Hello user with name \"{$name}\"\n";

$nowdoc = <<<'THML'
<script type="text/javascript">
    alert(1);
</script>
THML;

$heredoc = <<<THML
<script type="text/javascript">
    alert(1);
</script>
THML;

echo $nowdoc, PHP_EOL;
echo $heredoc, PHP_EOL;







