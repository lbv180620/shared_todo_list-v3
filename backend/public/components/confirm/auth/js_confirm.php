<?php

use App\Utils\Common;

?>

<script>
    function checkSubmit() {
        if (window.confirm('<?= Common::h($message) ?>')) {
            return true;
        } else {
            return false;
        }
    }

    function checkLogout() {
        if (window.confirm('ログアウトしますか?')) {
            return true;
        } else {
            return false;
        }
    }
</script>
