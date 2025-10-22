<?php
namespace App\Nav;

class Menu_Walker extends \Walker_Nav_Menu {

    /* Open submenu */
    function start_lvl(&$output, $depth = 0, $args = []) {
        $output .= '<ul class="hidden absolute z-50 py-2 bg-white rounded shadow w-48">';
    }

    /* Close submenu */
    function end_lvl(&$output, $depth = 0, $args = []) {
        $output .= '</ul>';
    }

    /* Open list element  */
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;

        /* Check if item has children */
        $has_children = in_array('menu-item-has-children', $classes);

        /* Open list item */
        $output .= '<li class="relative">';

        /* If the item has children make it a button, otherwise make it a link */
        if ($has_children) {
            $output .= '<button class="flex items-center gap-2 px-4 py-2" data-dropdown-toggle="dropdown-'. $item->ID .'">';
            $output .= esc_html($item->title);
            $output .= ' <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5 8l5 5 5-5H5z"/></svg>';
            $output .= '</button>';
        } else {
            $output .= '<a href="'. esc_url($item->url) .'" class="block px-4 py-2 hover:rounded-md hover:bg-gray-800 hover:text-red-600">';
            $output .= esc_html($item->title);
            $output .= '</a>';
        }
    }

    /* Close List item */
    function end_el(&$output, $item, $depth = 0, $args = []) {
        $output .= '</li>';
    }
}