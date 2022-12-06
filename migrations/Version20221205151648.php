<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205151648 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resource DROP FOREIGN KEY FK_BC91F416F675F31B');
        $this->addSql('ALTER TABLE resource ADD CONSTRAINT FK_BC91F416F675F31B FOREIGN KEY (author_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resource DROP FOREIGN KEY FK_BC91F416F675F31B');
        $this->addSql('ALTER TABLE resource ADD CONSTRAINT FK_BC91F416F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
    }
}