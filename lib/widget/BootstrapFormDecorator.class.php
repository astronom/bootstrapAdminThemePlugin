<?php

class BootstrapFormDecorator extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat                 = "<div class=\"control-group\">\n  %label%\n  <div class=\"controls\">%field%\n%error%\n%help%</div>\n%hidden_fields%</div>\n",
    $helpFormat                = '<p class=\"help-block\">%help%</p>',
    $decoratorFormat           = "%content%",
    $errorListFormatInARow     = "<span class=\"help-inline\">%errors%</span>\n",
    $errorRowFormat            = "%errors%",
    $errorRowFormatInARow      = "<div class=\"alert alert-error alert-block\">%error%</div>\n",
    $namedErrorRowFormatInARow = "<p><strong class=\"alert-heading\">%name%</strong>: %error%</p>\n";
  
}
