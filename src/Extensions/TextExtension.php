<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
{
    public function getLocale(): string|null
    {
        return 'de_DE';
    }

    /**
     * Text in format => Paragraphs => Sentences => Words.
     *
     * @var array|array[]
     */
    protected array $paragraphs = [
        [
            ['Innovation', 'treibt', 'Fortschritt', 'in', 'modernen', 'Branchen', 'und', 'Dienstleistungen.'],
            ['Zusammenarbeit', 'zwischen', 'Teams', 'führt', 'zu', 'effizienteren', 'Ergebnissen.'],
            ['Effektive', 'Kommunikation', 'ist', 'ein', 'Grundpfeiler', 'für', 'produktive', 'Arbeitsumgebungen.'],
            ['Flexibilität', 'und', 'Anpassungsfähigkeit', 'sind', 'entscheidend', 'in', 'dynamischen', 'Geschäftsumfeldern.'],
        ],
        [
            ['Ressourcenmanagement', 'ist', 'essentiell', 'für', 'die', 'Erreichung', 'organisatorischer', 'Ziele.'],
            ['Kontinuierliche', 'Verbesserung', 'hilft', 'Unternehmen', 'wettbewerbsfähig', 'und', 'relevant', 'zu', 'bleiben.'],
            ['Die', 'Nutzung', 'von', 'Technologie', 'ermöglicht', 'es', 'Teams', 'smarter', 'und', 'schneller', 'zu', 'arbeiten.'],
            ['Strategische', 'Planung', 'führt', 'zum', 'langfristigen', 'Erfolg', 'auf', 'herausfordernden', 'Märkten.'],
        ],
        [
            ['Kundenzufriedenheit', 'bleibt', 'ein', 'wichtiges', 'Kriterium', 'für', 'den', 'Geschäftserfolg.'],
            ['Fortschritt', 'zu', 'überwachen', 'hilft', 'Möglichkeiten', 'für', 'Wachstum', 'und', 'Verbesserung', 'zu', 'identifizieren.'],
            ['Tägliche', 'Herausforderungen', 'werden', 'durch', 'Teamarbeit', 'und', 'innovative', 'Lösungen', 'überwunden.'],
            ['Regelmäßige', 'Bewertungen', 'stellen', 'sicher', 'dass', 'Prozesse', 'mit', 'den', 'geschäftlichen', 'Zielen', 'übereinstimmen.'],
        ],
        [
            ['Berufliche', 'Entwicklung', 'ermöglicht', 'es', 'Mitarbeitern', 'ihr', 'volles', 'Potenzial', 'zu', 'erreichen.'],
            ['Schulungsprogramme', 'unterstützen', 'sowohl', 'individuelles', 'als', 'auch', 'organisatorisches', 'Wachstum.'],
            ['Kontinuierliches', 'Lernen', 'fördert', 'Innovation', 'und', 'Anpassung', 'an', 'veränderte', 'Bedürfnisse.'],
            ['Personalisierte', 'Ansätze', 'zur', 'Entwicklung', 'fördern', 'Engagement', 'und', 'Mitarbeiterbindung.'],
        ],
        [
            ['Datenanalyse', 'liefert', 'Einblicke', 'in', 'Leistung', 'und', 'Markttrends.'],
            ['Ziele', 'werden', 'angepasst', 'um', 'mit', 'den', 'sich', 'verändernden', 'Kundenerwartungen', 'übereinzustimmen.'],
            ['Regelmäßige', 'Überprüfungen', 'ermöglichen', 'schnelle', 'Reaktionen', 'auf', 'aufkommende', 'Herausforderungen.'],
            ['Entscheidungen', 'werden', 'von', 'genauen', 'Daten', 'und', 'klaren', 'Strategien', 'gesteuert.'],
            ['Laufende', 'Bewertungen', 'helfen', 'Ansätze', 'zu', 'verfeinern', 'und', 'nachhaltiges', 'Wachstum', 'zu', 'erzielen.'],
        ],
    ];
}
