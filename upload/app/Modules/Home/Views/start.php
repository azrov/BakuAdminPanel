<?php
    if ($show) {
        echo $this->include('admin/pages/underrepair');
    } else {
        echo $this->include($path . '\pages' . $page);
    }
?>