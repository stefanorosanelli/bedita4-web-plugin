<!--
<script type="text/javascript">
var message = "{t}Are you sure that you want to delete the item?{/t}" ;
var messageSelected = "{t}Are you sure that you want to delete selected items?{/t}" ;
var urls = Array();
urls['deleteSelected'] = "{$html->url('deleteSelected/')}";
urls['changestatusSelected'] = "{$html->url('changeStatusObjects/')}";
urls['copyItemsSelectedToAreaSection'] = "{$html->url('addItemsToAreaSection/')}";
urls['moveItemsSelectedToAreaSection'] = "{$html->url('moveItemsToAreaSection/')}";
urls['removeFromAreaSection'] = "{$html->url('removeItemsFromAreaSection/')}";
urls['assocObjectsCategory'] = "{$html->url('assocCategory/')}";
urls['disassocObjectsCategory'] = "{$html->url('disassocCategory/')}";
var no_items_checked_msg = "{t}No items selected{/t}";
var sel_status_msg = "{t}Select a status{/t}";
var sel_category_msg = "{t}Select a category{/t}";
var sel_copy_to_msg = "{t}Select a destination to 'copy to'{/t}";
</script>

{$html->script('fragments/list_objects.js', false)}

-->

<form method="POST" action="" id="formObject">
<!--
	{$beForm->csrf()}
    <input type="hidden" name="data[id]"/>
-->

    <table class="indexlist js-header-float">
        <thead>
            <tr>
                <th>title</th>
                <th style="text-align:center">id</th>
                <th style="text-align:center">status</th>
                <th>modified</th>
            </tr>
		</thead>

        <?php if (count($data) === 0): ?>
            <tr>
                <td colspan="100">No items found</td>
            </tr>
        <?php endif; ?>

        <?php foreach ($data as $object): ?>

        <?php $viewUrl = $baseUrl . '/' . $currentModule->name . '/' . $object['id'] ?>

		<tr class="obj <?= $object['status'] ?>">
<!--
			<td class="checklist">
			{if !empty($objects[i].start_date) && ($objects[i].start_date|date_format:"%Y%m%d") > ($smarty.now|date_format:"%Y%m%d")}

				<img title="{t}object scheduled in the future{/t}" src="{$html->webroot}img/iconFuture.png" style="height:28px; vertical-align:top;">

			{elseif !empty($objects[i].end_date) && ($objects[i].end_date|date_format:"%Y%m%d") < ($smarty.now|date_format:"%Y%m%d")}

				<img title="{t}object expired{/t}" src="{$html->webroot}img/iconPast.png" style="height:28px; vertical-align:top;">

			{elseif (!empty($objects[i].start_date) && (($objects[i].start_date|date_format:"%Y%m%d") == ($smarty.now|date_format:"%Y%m%d"))) or ( !empty($objects[i].end_date) && (($objects[i].end_date|date_format:"%Y%m%d") == ($smarty.now|date_format:"%Y%m%d")))}

				<img title="{t}object scheduled today{/t}" src="{$html->webroot}img/iconToday.png" style="height:28px; vertical-align:top;">

			{/if}

			{if !empty($objects[i].num_of_permission)}
				<img title="{t}permissions set{/t}" src="{$html->webroot}img/iconLocked.png">
			{/if}

			{if ($objects[i].ubiquity|default:0 > 1)}
				<img title="{t}ubiquous object{/t}" src="{$html->webroot}img/iconUbiquity.png">
			{/if}

			{if (empty($objects[i].fixed))}
				<input type="checkbox" name="objects_selected[]" class="objectCheck" title="{$objects[i].id}" value="{$objects[i].id}" />
			{else}
				<img title="{t}fixed object{/t}" src="{$html->webroot}img/iconFixed.png" />
			{/if}

            {$view->element('list_objects_elements', ['object' => $objects[i]])}
-->
			</td>
			<td style="min-width:300px">
				<a href="<?= $viewUrl ?>"><?= $object['title'] ?></a>

				<!-- <a href="{$html->url('view/')}{$objects[i].id}">{$objects[i].title|escape|truncate:64|default:"<i>[no title]</i>"}</a>
				<div class="description" id="desc_{$objects[i].id}">
					{$view->element('list_objects_detail', ['object' => $objects[i]])}
				</div> -->
			</td>
			<!-- <td class="checklist detail" style="text-align:left;">
				<a href="javascript:void(0)" onclick="$('#desc_{$objects[i].id}').slideToggle(); $('.plusminus',this).toggleText('+','-')">
				<span class="plusminus">+</span>
				&nbsp;
				{$objects[i].id}
				</a>
			</td> -->
			<td style="text-align:center"><a href="<?= $viewUrl ?>"><?= $object['id'] ?></a></td>
			<td style="text-align:center"><?= $object['status'] ?></td>
			<td style="white-space:nowrap"><?= $object['modified'] ?></td>
			<!-- {if !empty($properties)}
				{foreach $properties as $p}
					<td class="custom-property-cell">
					{if !empty($objects[i].customProperties[$p.name]) && $p.object_type_id == $objects[i].object_type_id}
						{if is_array($objects[i].customProperties[$p.name])}
							{$objects[i].customProperties[$p.name]|@implode:", "|truncate:25:"..."|escape}
						{else}
							{$objects[i].customProperties[$p.name]|truncate:25:"..."|escape}
						{/if}
					{else}
						-
					{/if}
					</td>
				{/foreach}
			{/if} -->
        </tr>

        <?php endforeach; ?>


</table>

<br />
<!--
{$view->element('list_objects_bulk', [
	'bulk_tree' => $bulk_tree|default:true,
	'bulk_categories' => $bulk_categories|default:true,
	'bulk_status' => $bulk_status|default:true,
	'bulk_hide_delete' => $bulk_hide_delete|default:false,
	'context' => $context|default:''
])}
-->

</form>

<br />
<br />
<br />
<br />
