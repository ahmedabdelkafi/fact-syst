<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220824101043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, prename VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, psw VARCHAR(255) NOT NULL, addr VARCHAR(255) NOT NULL, speciality VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, langues VARCHAR(255) NOT NULL, cnam VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doc_com (id INT AUTO_INCREMENT NOT NULL, docnum VARCHAR(255) NOT NULL, objet VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, prix_u DOUBLE PRECISION NOT NULL, qte INT NOT NULL, cnam VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, prename VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, psw VARCHAR(255) NOT NULL, num INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE doc_com');
        $this->addSql('DROP TABLE `user`');
    }
}
