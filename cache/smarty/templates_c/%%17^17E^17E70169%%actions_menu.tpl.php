<?php /* Smarty version 2.6.31, created on 2021-07-23 22:11:45
         compiled from themes/SuiteP/include/MySugar/tpls/actions_menu.tpl */ ?>
<ul class="dropdown-menu tab-actions">
    <?php if (! $this->_tpl_vars['lock_homepage']): ?>

        <li>
            <input class="button addDashlets" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashlet" value="<?php echo $this->_tpl_vars['lblAddDashlets']; ?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashboard" value="<?php echo $this->_tpl_vars['lblAddTab']; ?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-edit-dashboard" value="<?php echo $this->_tpl_vars['app']['LBL_EDIT_TAB']; ?>
">
        </li>
    <?php endif; ?>
</ul>