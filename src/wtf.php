<?php
/**
 * Super easy debugging function
 * Prints everything to browser, formatted
 * Multiple arguments possible of any kind
 * Example: wtf('foo');
 * Example: wtf(['bar'], ['foo'=>'bar']);
 */
function wtf() {
    array_map(function($x) {
        if(is_object($x)||is_array($x)) echo '<pre>'.print_r($x,1).'</pre>'.PHP_EOL;
        elseif(function_exists('var_dump_safe')) { var_dump_safe($x); echo '<br>'.PHP_EOL; }
        else { var_dump($x); echo '<br>'.PHP_EOL; }
    }, func_get_args());
}
