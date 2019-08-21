# Подключение модуля телеграм бота
import telebot
# Подключение модуля поиска подстроки в строке
import re

# Определение бота
bot = telebot.TeleBot("826657803:AAEwFXQlBQOKJJgfLJ-CS6JRnz3y3aD7k1A")
# Если боту отправлена команда 'start' или 'help'
@bot.message_handler(commands=['start', 'help'])
def send_welcome(message):
		bot.reply_to(message, "Можешь пообщаться со мной, если хочешь")
# Если боту отправлена текст
@bot.message_handler(content_types=['text'])
def echo_all(message):
		if re.search(r'\bпривет\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bхей\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bхай\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bздорова\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bздрасти\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bздравствуйте\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bйо\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bйоу\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bшалом\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name)
		if re.search(r'\bghbdtn\b', message.text.lower()):
				bot.send_message(message.chat.id, "Привет "+ message.from_user.first_name+ "!\nТы написал слова неправильно, но ничего, я всё понял! c:")
		if re.search(r'\bу тебя дела\b', message.text.lower()):
				bot.send_message(message.chat.id, "Ты спрашиваешь про мои дела ? У меня всё отлично, ты за кого меня держишь ?А у тебя как ?")
		if re.search(r'\bкак ты\b', message.text.lower()):
				bot.send_message(message.chat.id, "Ты спрашиваешь про мои дела ? У меня всё отлично, ты за кого меня держишь ?А у тебя как ?")
		if re.search(r'\bче, кого\b', message.text.lower()):
				bot.send_message(message.chat.id, "Ты спрашиваешь про мои дела ? У меня всё отлично, ты за кого меня держишь ?А у тебя как ?")
		if re.search(r'\bхорошо\b', message.text.lower()):
				bot.send_message(message.chat.id, "Это хорошо")
		if re.search(r'\bотлично\b', message.text.lower()):
				bot.send_message(message.chat.id, "Это хорошо")
		if re.search(r'\bнормально\b', message.text.lower()):
				bot.send_message(message.chat.id, "Это хорошо")
		if re.search(r'\bнорм\b', message.text.lower()):
				bot.send_message(message.chat.id, "Это хорошо")
		if re.search(r'\bплохо\b', message.text.lower()):
				bot.send_message(message.chat.id, "Это не хорошо")
		if re.search(r'\bты кто\b', message.text.lower()):
				bot.send_message(message.chat.id, "Я обычный бот")
# Запуск ботаmessage.from_user.first_name
bot.polling( none_stop = True )
