# Generated by Django 2.2.2 on 2020-01-20 07:36

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('news', '0003_auto_20200108_0220'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='category',
            options={'verbose_name_plural': 'Categories'},
        ),
        migrations.AlterField(
            model_name='news',
            name='category',
            field=models.ManyToManyField(related_name='news_categoreis', to='news.Category'),
        ),
        migrations.AlterField(
            model_name='news',
            name='count',
            field=models.IntegerField(default=0),
        ),
    ]
