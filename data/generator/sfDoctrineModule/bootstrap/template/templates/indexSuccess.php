[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

[?php #include_partial('<?php echo $this->getModuleName() ?>/navbar', array('filter' => <?php echo $this->configuration->hasFilterForm() ? true : false ?>)) ?]

  <?php if ($this->configuration->hasFilterForm()): ?>
    [?php $filterValues = $sf_user->getRawValue()->getAttribute('<?php echo $this->getModuleName() ?>.filters', array(), 'admin_module'); if (!empty($filterValues)): ?]
    <div class="alert alert-info alert-block">
      <a href="#" class="close fade" data-dismiss="alert">&times;</a>
      <h4 class="alert-heading">Filter</h4>
      These results are filtered. <a href="#filterPopup" data-toggle="modal">Modify filter</a>
    </div>
    [?php endif; ?]

    <div class="pull-right">
      <a href="#filterPopup" class="btn" data-toggle="modal"><i class="icon-search"></i> Search</a>
    </div>

  <?php endif; ?>

  <h1>[?php echo <?php echo $this->getI18NString('list.title') ?> ?]
    <small class="offset2">[?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?]
    [?php if ($pager->haveToPaginate()): ?]
      [?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?]
    [?php endif; ?]</small></h1>

  [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

  [?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)) ?]

<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
<?php endif; ?>
    [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    </form>
<?php endif; ?>

  <div id="sf_admin_footer">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
  </div>

<?php if ($this->configuration->hasFilterForm()): ?>
  [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
<?php endif; ?>
