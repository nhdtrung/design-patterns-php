Design Pattern by HeadFirst Design Pattern Book.

# 4. Factory Method (a.k.a Virtual Constructor)

- This part is an example for Factory Method. Part 2 belongs to Aabstract factory is here.

```
This belongs to creational design pattern that provides an interface for creating objects in a supperclass, but allows subclasses to alter/decide type of object that will be created.
```

# Design Principle:

- Depend upon abstractions. Do not depend upon concrete classes.

# Real life example:

- Imagine you're using Mysql database connections in your backend system.
- One day customer want to switch to use MYSQL Server for some purposes.
- Then we need create new class for MYSQL Server with existing interface using by Mysql before.
- And edit you backend code to use new connection.
- In future, customer wants to change to other DB connector then you needs to do the same thing above...
- Imagine you have 300 lines of code using this connector, then you need edit all of them, it's terrible.

# Why Factory Pattern helps here:

- Decoupling the creation creation of object/interface from your code.
- When you need to edit, add or remove some connector, just need to edit 1 method without affect other classes.

# Cons:

- Loose Coupling
- Reusability
- Easier to maintain
