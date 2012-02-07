<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
[?php slot('sf_admin.current_header') ?]
<th>
<?php if ($field->isReal()): ?>
  [?php if ('<?php echo $name ?>' == $sort[0]): ?]
    [?php echo link_to(__('<?php echo $field->getConfig('label', '', true) ?> <i class="icon-chevron-'.(($sort[1] == 'asc') ? 'down' : 'up').'"></i>', array(), '<?php echo $this->getI18nCatalogue() ?>'), '@<?php echo $this->getUrlForAction('list') ?>', array('query_string' => 'sort=<?php echo $name ?>&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?]
  [?php else: ?]
    [?php echo link_to(__('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>'), '@<?php echo $this->getUrlForAction('list') ?>', array('query_string' => 'sort=<?php echo $name ?>&sort_type=asc')) ?]
  [?php endif; ?]
<?php else: ?>
  [?php echo __('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>') ?]
<?php endif; ?>
</th>
[?php end_slot(); ?]
<?php echo $this->addCredentialCondition("[?php include_slot('sf_admin.current_header') ?]", $field->getConfig()) ?>
<?php endforeach; ?>
