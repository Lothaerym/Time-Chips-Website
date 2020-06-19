<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200619142712 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE information (id INT AUTO_INCREMENT NOT NULL, monday_start LONGTEXT DEFAULT NULL, monday_end VARCHAR(255) DEFAULT NULL, tuesday_start VARCHAR(255) DEFAULT NULL, tuesday_end VARCHAR(255) DEFAULT NULL, wednesday_start VARCHAR(255) DEFAULT NULL, wednesday_end VARCHAR(255) DEFAULT NULL, thursday_start VARCHAR(255) DEFAULT NULL, thursday_end VARCHAR(255) DEFAULT NULL, friday_start VARCHAR(255) DEFAULT NULL, friday_end VARCHAR(255) DEFAULT NULL, saturday_start VARCHAR(255) DEFAULT NULL, saturday_end VARCHAR(255) DEFAULT NULL, sunday_start VARCHAR(255) DEFAULT NULL, sunday_end VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE migration_versions');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE migration_versions (version VARCHAR(14) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, executed_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE information');
    }
}
