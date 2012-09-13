<?php

/**
 * Assetic for Contao Open Source CMS
 *
 * Copyright (C) 2012 InfinitySoft
 *
 * @package Assetic
 * @author  Tristan Lins <tristan.lins@infinitysoft.de>
 * @link    http://www.infinitysoft.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


\Controller::loadLanguageFile('assetic');
\Controller::loadLanguageFile('tl_assetic_filter_chain');

/**
 * Table tl_assetic_filter
 */
$GLOBALS['TL_DCA']['tl_assetic_filter'] = array
(

    // Config
    'config'       => array
    (
        'dataContainer'    => 'Table',
        'enableVersioning' => true,
        'sql'              => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        ),
    ),

    // List
    'list'         => array
    (
        'sorting'           => array
        (
            'mode'        => 2,
            'fields'      => array('type'),
            'flag'        => 1,
            'panelLayout' => 'filter;sort,search,limit'
        ),
        'label'             => array
        (
            'fields' => array('type'),
            'format' => '%s',
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations'        => array
        (
            'edit'   => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_assetic_filter']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif'
            ),
            'delete' => array
            (
                'label'      => &$GLOBALS['TL_LANG']['tl_assetic_filter']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show'   => array
            (
                'label'      => &$GLOBALS['TL_LANG']['tl_assetic_filter']['show'],
                'href'       => 'act=show',
                'icon'       => 'show.gif',
                'attributes' => 'style="margin-right:3px"'
            ),
        )
    ),

    // Palettes
    'palettes'     => array
    (
        '__selector__' => array('type'),
    ),

    'metapalettes' => array
    (
        'default'              => array(
            'filter' => array('type'),
        ),
        'coffee'               => array(
            'filter' => array('type', 'note'),
            'coffee' => array('coffeePath', 'nodePath'),
            'status' => array('disabled'),
        ),
        'compass'              => array(
            'filter'  => array('type', 'note'),
            'compass' => array('compassPath', 'rubyPath'),
            'status'  => array('disabled'),
        ),
        'cssEmbed'             => array(
            'filter'   => array('type', 'note'),
            'cssEmbed' => array('cssEmbedPath', 'javaPath'),
            'status'   => array('disabled'),
        ),
        'cssImport'            => array(
            'filter'    => array('type', 'note'),
            'cssImport' => array('importFilter'),
            'status'    => array('disabled'),
        ),
        'cssMin'               => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'cssRewrite'           => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'gss'                  => array(
            'filter' => array('type', 'note'),
            'gss'    => array('gssPath', 'javaPath'),
            'status' => array('disabled'),
        ),
        'less'                 => array(
            'filter'  => array('type', 'note'),
            'less'    => array('nodePath', 'nodePaths'),
            'status'  => array('disabled'),
        ),
        'lessphp'              => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'packager'             => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'phpCssEmbed'          => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'scssphp'              => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'stylus'               => array(
            'filter' => array('type', 'note'),
            'stylus' => array('nodePath', 'nodePaths'),
            'status' => array('disabled'),
        ),
        'uglifyCss'            => array(
            'filter'    => array('type', 'note'),
            'uglifyCss' => array('uglifyCssPath', 'nodePath'),
            'status'    => array('disabled'),
        ),
        'handlebars'           => array(
            'filter'     => array('type', 'note'),
            'handlebars' => array('handlebarsPath', 'nodePath'),
            'status'     => array('disabled'),
        ),
        'jsMin'                => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'jsMinPlus'            => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'packager'             => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'packer'               => array(
            'filter' => array('type', 'note'),
            'status' => array('disabled'),
        ),
        'uglifyJs'             => array(
            'filter'   => array('type', 'note'),
            'uglifyJs' => array('uglifyJsPath', 'nodePath'),
            'status'   => array('disabled'),
        ),
        'yuiCss'               => array(
            'filter'   => array('type', 'note'),
            'uglifyJs' => array('yuiPath', 'javaPath'),
            'status'   => array('disabled'),
        ),
        'yuiJs'                => array(
            'filter'   => array('type', 'note'),
            'uglifyJs' => array('yuiPath', 'javaPath'),
            'status'   => array('disabled'),
        ),
        'sass'                 => array(
            'filter'   => array('type', 'note'),
            'uglifyJs' => array('sassPath', 'rubyPath'),
            'status'   => array('disabled'),
        ),
        'scss'                 => array(
            'filter'   => array('type', 'note'),
            'uglifyJs' => array('sassPath', 'rubyPath'),
            'status'   => array('disabled'),
        ),
        'closureApi'           => array(
            'filter'   => array('type', 'note'),
            'status'   => array('disabled'),
        ),
        'closureJar'           => array(
            'filter'   => array('type', 'note'),
            'uglifyJs' => array('closurePath', 'javaPath'),
            'status'   => array('disabled'),
        ),
    ),

    // Fields
    'fields'       => array
    (
        'id'                       => array
        (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp'                   => array
        (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'type'                     => array
        (
            'label'            => &$GLOBALS['TL_LANG']['tl_assetic_filter']['type'],
            'inputType'        => 'select',
            'exclude'          => true,
            'sorting'          => true,
            'flag'             => 1,
            'filter'           => true,
            'options_callback' => array('\Assetic\DataContainer\AsseticFilter', 'getFilterTypeOptions'),
            'reference'        => $GLOBALS['TL_LANG']['assetic'],
            'eval'             => array('mandatory'          => true,
                                        'tl_class'           => 'w50',
                                        'includeBlankOption' => true,
                                        'submitOnChange'     => true),
            'sql'              => "varchar(128) NOT NULL default ''"
        ),
        'note'                     => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['note'],
            'inputType' => 'text',
            'exclude'   => true,
            'flag'      => 1,
            'search'    => true,
            'eval'      => array('maxlength' => 128,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(128) NOT NULL default ''"
        ),
        'disabled'                 => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['disabled'],
            'inputType' => 'checkbox',
            'exclude'   => true,
            'sorting'   => true,
            'flag'      => 1,
            'filter'    => true,
            'eval'      => array('tl_class'  => 'w50'),
            'sql'       => "char(1) NOT NULL default ''"
        ),

        /**
         * System paths
         */
        'nodePath'                 => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['nodePath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'nodePaths'                => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['nodePaths'],
            'inputType' => 'multiColumnWizard',
            'exclude'   => true,
            'eval'      => array('columnFields' => array(
                'path'     => array(
                    'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['nodePathsPath'],
                    'inputType' => 'text',
                    'eval'      => array('style'=> 'width:500px'),
                ),
                'tl_class' => 'clr'
            )),
            'sql'       => "blob NULL",
        ),
        'rubyPath'                 => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['rubyPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
        'javaPath'                 => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['javaPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * CoffeeScript settings
         */
        'coffeePath'               => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['coffeePath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * Compass settings
         */
        'compassPath'              => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['compassPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * CssEmbed settings
         */
        'cssEmbedPath'             => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['cssEmbedPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('mandatory' => true,
                                 'maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * CssImport settings
         */
        'importFilter'             => array
        (
            'label'            => &$GLOBALS['TL_LANG']['tl_assetic_filter']['importFilter'],
            'inputType'        => 'select',
            'exclude'          => true,
            'options_callback' => array('Assetic\DataContainer\AsseticFilter', 'getImportFilterOptions'),
            'reference'        => &$GLOBALS['TL_LANG']['assetic'],
            'eval'             => array('tl_class'           => 'w50',
                                        'includeBlankOption' => true),
            'sql'              => "blob NULL",
        ),

        /**
         * Compass settings
         */
        'gssPath'                  => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['gssPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('mandatory' => true,
                                 'maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * UglifyCss settings
         */
        'uglifyCssPath'            => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['uglifyCssPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('mandatory' => true,
                                 'maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * Handlebars settings
         */
        'handlebarsPath'           => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['handlebarsPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * Handlebars settings
         */
        'uglifyJsPath'             => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['uglifyJsPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('mandatory' => true,
                                 'maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * YUI settings
         */
        'yuiPath'                  => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['yuiPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('mandatory' => true,
                                 'maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * SASS settings
         */
        'sassPath'                 => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['sassPath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('mandatory' => true,
                                 'maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),

        /**
         * Closure settings
         */
        'closurePath'              => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_assetic_filter']['closurePath'],
            'inputType' => 'text',
            'exclude'   => true,
            'eval'      => array('mandatory' => true,
                                 'maxlength' => 255,
                                 'tl_class'  => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
        ),
    )
);