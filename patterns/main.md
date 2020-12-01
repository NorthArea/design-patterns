# Паттерны
Любой **паттерн** описывает задачу, которая снова и снова возникает в нашей работе, а так же принципе ее решения, причем таким образом, что это решение модно потом использовать миллион раз, ничего не изобретая заново. (Кристофер Александр)

**Паттерн проектирования** - описание взаимодействия объектов и классов, адаптированных для решения общей задачи проектирования в конкретном контексте.   
___

## Каталог паттернов проектирования
### Abstract Factory
Предоставляет интерфейс объектов, конкретные классы которых неизвестны.

### Adapter
Преобразует интерфейс класса в некоторый другой интерфейс, ожидаемый клиентами.

### Bridge
Отделяет абстракцию от реализации.

### Builder
Отделяет конструирование объекта от его представления.

### Chain of Responsibility
Позволяет избежать жесткой зависимости отправителя запроса от его получателя.

### Command
Инкапсулирует запрос в виде объекта

### Composite
Группирует объекты в древовидные структуры

### Decorator
Динамически добавляет объекту новые функции

### Facade
Предоставляет унифицированный интерфейс к множеству интерфейсов

### Factory method
Создание единого интерфейса для инстанцирования выбранного класса его подклассами

### Flyweight
### Interpreter
### Iterator
### Mediator
### Memento
### Observer
### Prototype
### Proxy
### Singleton
### State
### Strategy
### Template method
### Visitor

## Классификация

| Цель \| Уровень     | Порождающие паттерны | Структурные паттерны | Паттерны поведения |
| -------- | -------------------- | -------------------- | ------------------ |
| Класс | Factory method | Adapter (Class) | Interpreter   Template method |
| Объект | Abstract Factory    Singleton    Prototype    Builder | Adapter(Object)    Decorator   Proxy   Composite   Bridge   Flyweight   Facade | Iterator   Command   Observer   Visitor   Mediator   State   Strategy   Memento   Chain of Responsibility |

### Цель
**Порождающие паттерны** - описывают процесс создания объектов   
**Структурные паттерны** - связаны с композицией объектов и классов   
**Паттерны поведения** - характеризуют то, как классы или объекты взаимодействуют друг с другом.

### Уровень
Паттерны уровня **классов** описывают отношения между классами и подклассами. Такие отношения выражаются с помощью наследования и фиксируются на этапе компиляции. Паттерны уровня **объектов** могут изменяться во время выполнения программы и являются более динамичными

**Порождающие паттерны классов** частично делегируют ответственность за создание объектов своим подклассам. **Порождающие паттерны объектов** делегируют ответственность за создание своих объектов другим объектам. **Структурные паттерны классов** используют наследование для составления классов, в то время, как **структурные паттерны объектов** описывают способы сборки объектов из частей. **Поведенческие паттерны классов** используют наследование для описания алгоритмов и потока управления. **Поведенческие паттерны объектов** описывают, как объекты, принадлежащей некоторой группе, совместно функционируют и выполняют задачу, которая непосильна отдельному объекту.  