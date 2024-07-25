<?php

namespace Classes;

use Exception;

class Render
{
    /**
     * Renderiza uma visualização com dados opcionais.
     *
     * @param string $view Nome da visualização a ser renderizada.
     * @param array $data Dados a serem extraídos para a visualização.
     * @throws Exception
     */
    public static function view(string $view, array $data = []): void
    {
        $pageContent = self::resolveViewPath($view);
        $templateView = self::resolveTemplatePath($data);

        if (file_exists($templateView)) {
            extract($data);
            include $templateView;
        } else {
            throw new Exception("Template {$templateView} não encontrado.");
        }
    }

    /**
     * @throws Exception
     */
    public static function notFound(): void
    {
        self::view('error.404', ['template' => 'error']);
    }

    /**
     * Resolve o caminho do arquivo de visualização.
     *
     * @param string $view Nome da visualização.
     * @return string Caminho do arquivo de visualização.
     */
    private static function resolveViewPath(string $view): string
    {
        $viewPath = dirname(__DIR__) . "/resources/views/" . str_replace('.', '/', $view) . '.php';
        return file_exists($viewPath) ? $viewPath : dirname(__DIR__) . "/resources/views/error/404.php";
    }

    /**
     * Resolve o caminho do arquivo de template.
     *
     * @param array $data Dados que podem conter o nome do template.
     * @return string Caminho do arquivo de template.
     * @throws Exception
     */
    private static function resolveTemplatePath(array $data): string
    {
        $template = $data['template'] ?? config('defaultTemplate');
        $templatePath = dirname(__DIR__) . "/resources/views/{$template}.php";

        if (!file_exists($templatePath)) {
            throw new Exception("Template {$template} não encontrado.");
        }

        return $templatePath;
    }
}