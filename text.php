<?php
require_once __DIR__ . "/vendor/autoload.php";

use \Izadori\ParsedownPlus\ParsedownPlus;

$parser = new ParsedownPlus();
$parser_ext = new ParsedownExtra();

$text = <<<EOF
# Equation of _Circle_

$ x_{1}^{2} + x_{2}^{2} = 1 $

```python: text.py

import random

```
EOF;

$line = "It's **inline** text!";

// parses Markdown text
echo $parser->text($text); // prints: <h1>Equation of <em>Circle</em></h1> <p>$  x_{1}^{2} + x_{2}^{2} = 1  $</p>
// parses inline text
echo $parser->line($line); // prints: It's <strong>inline</strong> text!
