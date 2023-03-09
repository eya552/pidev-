<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308170906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD type_contrat_id INT NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD adresse VARCHAR(255) NOT NULL, DROP prenom_client, DROP id_animal, DROP region, CHANGE datededebut datededebut VARCHAR(255) NOT NULL, CHANGE datedefin datedefin VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993520D03A FOREIGN KEY (type_contrat_id) REFERENCES type_contrat (id)');
        $this->addSql('CREATE INDEX IDX_60349993520D03A ON contrat (type_contrat_id)');
        $this->addSql('ALTER TABLE type_contrat DROP FOREIGN KEY FK_4815F6661823061F');
        $this->addSql('DROP INDEX IDX_4815F6661823061F ON type_contrat');
        $this->addSql('ALTER TABLE type_contrat DROP contrat_id, CHANGE typecontrat type_contrat VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_60349993520D03A');
        $this->addSql('DROP INDEX IDX_60349993520D03A ON contrat');
        $this->addSql('ALTER TABLE contrat ADD prenom_client VARCHAR(255) NOT NULL, ADD id_animal VARCHAR(255) NOT NULL, ADD region VARCHAR(255) NOT NULL, DROP type_contrat_id, DROP prenom, DROP adresse, CHANGE datededebut datededebut DATE NOT NULL, CHANGE datedefin datedefin DATE NOT NULL');
        $this->addSql('ALTER TABLE type_contrat ADD contrat_id INT DEFAULT NULL, CHANGE type_contrat typecontrat VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE type_contrat ADD CONSTRAINT FK_4815F6661823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id)');
        $this->addSql('CREATE INDEX IDX_4815F6661823061F ON type_contrat (contrat_id)');
    }
}
