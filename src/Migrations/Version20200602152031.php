<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200602152031 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO accueil VALUES(1, "content", "facebook url", "map url")');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM `accueil` WHERE id="1"');

    }
}
