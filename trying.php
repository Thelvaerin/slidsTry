<?php
$menu = Array(
    Array(
        'title' => 'Home',
        'link' => 'a'
    ),
    Array(
        'title' => 'Parent',
        'link' => 'b',
        'children' => Array(
            Array(
                'title' => 'Sub 1',
                'link' => 'c'
            ),
            Array(
                'title' => 'Sub 2',
                'link' => 'd'
            ),
        )
    )
);
function buildMenu($menuArray)
{
    foreach ($menuArray as $node)
    {
        $selected = ($node['link']== $_GET['menu']) ? $selected = 'style="color: red;"' : null;
        echo "<li ".$selected."><a href='?menu=".$node['link']."'/>" . $node['title'] . "</a>";
        if ( ! empty($node['children'])) {
            echo "<ul>";
            buildMenu($node['children']);
            echo "</ul>";
        }
        echo "</li>";
    }
}
buildMenu($menu);
?>