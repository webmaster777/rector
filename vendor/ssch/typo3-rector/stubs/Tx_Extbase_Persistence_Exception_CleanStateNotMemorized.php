<?php

namespace RectorPrefix20210801;

if (\class_exists('Tx_Extbase_Persistence_Exception_CleanStateNotMemorized')) {
    return;
}
class Tx_Extbase_Persistence_Exception_CleanStateNotMemorized
{
}
\class_alias('Tx_Extbase_Persistence_Exception_CleanStateNotMemorized', 'Tx_Extbase_Persistence_Exception_CleanStateNotMemorized', \false);
