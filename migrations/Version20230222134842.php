<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222134842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, typedecontrat_id INT NOT NULL, idclient VARCHAR(255) NOT NULL, idanimal VARCHAR(255) NOT NULL, datededebut DATE NOT NULL, datedefin DATE NOT NULL, franchise VARCHAR(255) NOT NULL, INDEX IDX_603499939F0FA064 (typedecontrat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typecontrat (id INT AUTO_INCREMENT NOT NULL, type_contrat VARCHAR(255) NOT NULL, prix INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_603499939F0FA064 FOREIGN KEY (typedecontrat_id) REFERENCES typecontrat (id)');
        $this->addSql('ALTER TABLE bilan_de_soin DROP id_bilan, CHANGE description description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_603499939F0FA064');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE typecontrat');
        $this->addSql('ALTER TABLE bilan_de_soin ADD id_bilan VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
    }
}
