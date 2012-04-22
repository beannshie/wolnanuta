<?php use_helper('I18N') ?>

<h1><?php echo __('Signin', null, 'sf_guard') ?></h1>

<div id="login_box">
    <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <table>
            <?php echo $form ?>
        </table>

        <center><input type="submit" class="submit"  value="Zaloguj się" /></center>
    </form>
    <br />
    <p>
        <?php echo link_to(__('Reset Your Password',array(),'sfForkedApply'), 'sfApply/resetRequest')  ?>
    </p>
    <p>
        <?php
        echo link_to(__('Create a New Account',array(),'sfForkedApply'), 'sfApply/apply')
        ?>
    </p>

</div>