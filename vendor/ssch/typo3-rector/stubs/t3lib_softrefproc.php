<?php

namespace RectorPrefix20210801;

if (\class_exists('t3lib_softrefproc')) {
    return;
}
class t3lib_softrefproc
{
}
\class_alias('t3lib_softrefproc', 't3lib_softrefproc', \false);
