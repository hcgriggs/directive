<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<div class="box container">
    <p><a href="<?php echo WEB_ROOT; ?>">Home</a> > Browse Items</p>
    <header>
        <h2><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h2>
        <p>Search all of the items</p>
        </header>

    <section>
        <p>You can browse through all <?php echo total_records('Item'); ?> items in the archive. By default, items are sorted from most recently added. However, you can sort them <?php echo browse_sort_links(array('sort them alphabetically by title'=>'Dublin Core,Title'), array('link_tag' => 'th scope="col"', 'list_tag' => '')); ?>, <?php echo browse_sort_links(array('chronologically by date'=>'Dublin Core,Date'), array('link_tag' => 'th scope="col"', 'list_tag' => '')); ?>, or use the advanced <a href="#" target="_blank">search</a>. </p>
    </section>
    
    <hr />
                    
    <section>

    <!-- Uncomment if table header desired: --> 
    <!-- <header>
            <h3>Items</h3>
        </header> -->
        <?php echo item_search_filters(); ?>
            <div class="table-wrapper">
                <table class="default">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                   <!--  table body iterates through items -->
                    <tbody>
                    <?php foreach (loop('items') as $item): ?>
                        <tr>
                            <!-- Dublin Core Date -->
                            <td><?php echo metadata('item', array('Dublin Core', 'Date')); ?></td>

                            <!-- Dublin Core Item Title -->
                            <td><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?></td>

                            <!-- Dublin Core Description -->
                                <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>150))): ?>
                            <td><?php echo $description; ?></td>
                                <?php endif; ?>

                            <!-- Dublin Core Type -->
                            <td><?php echo metadata('item', array('Dublin Core', 'Type')); ?></td>
                                          <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <td><?php echo pagination_links($options = array('page_range')); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    <!-- Shows output formats -->
   <!--  <section><?php echo output_format_list(false); ?></section> -->
</div>
</div>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>
