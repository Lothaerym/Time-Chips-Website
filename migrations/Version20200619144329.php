<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200619144329 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO information VALUES(1, "mondayStart", "mondayEnd", "thuesdayStart", "thuesdayEnd", "wedStart", "wedEnd", "thurS", "thurE", "friS", "friE", "satS", "satE", "sunS", "sunE", "phone", "address")');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM `information` WHERE id="1"');

    }
}
