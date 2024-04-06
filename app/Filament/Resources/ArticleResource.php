<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)->schema([
                    Forms\Components\Section::make('Informations générales')
                        ->columnSpan(2)
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->label('Titre')
                                ->live(onBlur: true)
                                ->afterStateUpdated(function (Set $set, $state) {
                                    $set('slug', Str::slug($state));
                                }),
                            Forms\Components\TextInput::make('slug')
                                ->required(),
                            Forms\Components\Textarea::make('excerpt')
                                ->required()
                                ->label('Extrait')
                                ->autosize()
                                ->rows(5)
                                ->columnSpanFull(),
                    ]),
                    Forms\Components\Section::make()
                        ->columnSpan(1)
                        ->schema([
                            Forms\Components\Select::make('status')
                                ->options(StatusEnum::class)
                                ->default(StatusEnum::Draft)
                                ->selectablePlaceholder(false),
                            Forms\Components\TextInput::make('meta_title')
                                ->columnSpanFull()
                                ->hint(fn ($state, $component) => strlen($state) . ' / 60')
                                ->maxlength(60)
                                ->reactive(),
                            Forms\Components\Textarea::make('meta_description')
                                ->columnSpanFull()
                                ->hint(fn ($state, $component) => strlen($state) . ' / 160')
                                ->maxlength(160)
                                ->reactive()
                                ->rows(5)
                                ->autosize(),
                            Forms\Components\FileUpload::make('image')
                                ->image()
                                ->imageEditor()
                                ->directory('images/articles')
                                ->columnSpanFull()
                                ->panelAspectRatio('2:1')
                                ->required(),
                        ]),
                ]),

                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->label('Contenu')
                    ->fileAttachmentsDirectory('images/articles')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Titre'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y')
                    ->label('Publié le')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
