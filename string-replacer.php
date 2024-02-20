<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class StringReplacerPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPageContentRaw' => ['onPageContentRaw', 0]
        ];
    }

    public function onPageContentRaw(Event $event)
    {
        $page = $event['page'];
        $content = $page->getRawContent();
        
        // Ottiene le configurazioni delle sostituzioni
        $replacements = (array) $this->config->get('plugins.string-replacer.replacements');
        
        foreach ($replacements as $replacement) {
            if (!empty($replacement['search']) && !empty($replacement['replace'])) {
                $content = str_replace($replacement['search'], $replacement['replace'], $content);
            }
        }

        $page->setRawContent($content);
    }
}
