<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230109025654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, type_equipment_id INT DEFAULT NULL, client_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, created_date DATETIME NOT NULL, modified_date DATETIME NOT NULL, INDEX IDX_D338D583D63C53FB (type_equipment_id), INDEX IDX_D338D58319EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D583D63C53FB FOREIGN KEY (type_equipment_id) REFERENCES type_equipment (id)');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D58319EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D583D63C53FB');
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D58319EB6921');
        $this->addSql('DROP TABLE equipment');
    }
}
