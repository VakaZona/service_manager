<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221230072817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE job_title (id INT AUTO_INCREMENT NOT NULL, job_title VARCHAR(255) NOT NULL, salary INT NOT NULL, created_date DATETIME NOT NULL, modified_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personal ADD job_title_id INT DEFAULT NULL, DROP salary');
        $this->addSql('ALTER TABLE personal ADD CONSTRAINT FK_F18A6D846DD822C6 FOREIGN KEY (job_title_id) REFERENCES job_title (id)');
        $this->addSql('CREATE INDEX IDX_F18A6D846DD822C6 ON personal (job_title_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personal DROP FOREIGN KEY FK_F18A6D846DD822C6');
        $this->addSql('DROP TABLE job_title');
        $this->addSql('DROP INDEX IDX_F18A6D846DD822C6 ON personal');
        $this->addSql('ALTER TABLE personal ADD salary INT NOT NULL, DROP job_title_id');
    }
}
