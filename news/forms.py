from django import forms
from news.models import News, Category

class NewsCreateForm(forms.ModelForm):
    CATEGORY_CHOICES = [(category.id, category.title) for category in Category.objects.all()]
    # CATEGORY_CHOICES = [(1, 'One'),(2, 'One'),(3, 'One')]
    category = forms.MultipleChoiceField(
        required=True, widget=forms.CheckboxSelectMultiple, choices=CATEGORY_CHOICES,
    )

    class Meta:
        model = News
        fields = "title", "content", "cover_image", "category"