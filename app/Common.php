<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */

if (! function_exists('texto_conteudo')) {
    /**
     * Exibe o texto vindo do banco com segurança, preservando quebras de
     * linha e as tags <br> usadas no conteúdo.
     */
    function texto_conteudo(?string $texto, string $padrao = ''): string
    {
        $texto = $texto ?? $padrao;

        if (trim($texto) === '') {
            return '';
        }

        $texto = esc($texto);
        $texto = str_ireplace(
            ['&lt;br&gt;', '&lt;br/&gt;', '&lt;br /&gt;'],
            '<br>',
            $texto,
        );

        return nl2br($texto);
    }
}

