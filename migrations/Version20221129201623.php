<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221129201623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE place');
        $this->addSql('ALTER TABLE events ADD places_id INT DEFAULT NULL, CHANGE date date VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE events ADD CONSTRAINT FK_5387574A8317B347 FOREIGN KEY (places_id) REFERENCES places (id)');
        $this->addSql('CREATE INDEX IDX_5387574A8317B347 ON events (places_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE place (address VARCHAR(40) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, name VARCHAR(43) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, capacity VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(address)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE events DROP FOREIGN KEY FK_5387574A8317B347');
        $this->addSql('DROP INDEX IDX_5387574A8317B347 ON events');
        $this->addSql('ALTER TABLE events DROP places_id, CHANGE date date VARCHAR(60) DEFAULT NULL');
    }
}
