using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Configuration;
using System.IO;
using System.Text.RegularExpressions;

namespace ConvertHTMLToPHP {
	class Program {
		static void Main(string[] args) {
			try {
				string fromPath = ConfigurationManager.AppSettings["FromPath"];
				string toPath = ConfigurationManager.AppSettings["ToPath"];
				string fromExt = ConfigurationManager.AppSettings["FromExt"];
				string toExt = ConfigurationManager.AppSettings["ToExt"];

				string[] fromFiles = Directory.GetFiles(fromPath, "*" + fromExt);
				string toFile = string.Empty;
				string fromContent = string.Empty;
				string toContent = string.Empty;
				FileInfo fromFileInfo;
				Regex regex;
				foreach (string fromFile in fromFiles) {
					if (File.Exists(fromFile)) {
						Write("From file:" + fromFile, "Yellow");
						fromFileInfo = new FileInfo(fromFile);
						toFile = string.Format("{0}\\{1}{2}", toPath, Path.GetFileNameWithoutExtension(fromFileInfo.FullName), toExt);
						fromContent = File.ReadAllText(fromFileInfo.FullName);
						regex = new Regex(
						@"\.html",
						RegexOptions.IgnoreCase
						| RegexOptions.Multiline
						| RegexOptions.IgnorePatternWhitespace
						| RegexOptions.Compiled
						);
						toContent = regex.Replace(fromContent, toExt);
						if (File.Exists(toFile)) {
							try {
								File.Delete(toFile);
							} catch (Exception ex) {
								Write("Convert to file exception:" + ex.Message, "Red");
							}
						}
						File.WriteAllText(toFile, toContent);
						Write("Convert to file:" + toFile, "Green");
					}
				}
			} catch (Exception ex) {
				Write("ConvertFile Exception:" + ex.Message, "Red");
			}
			Console.ReadLine();
		}

		static void Write(string message, string colorName) {
			// Convert the string representing the enum name to the enum value.
			ConsoleColor color = (ConsoleColor)Enum.Parse(typeof(ConsoleColor), colorName);
			Console.BackgroundColor = ConsoleColor.Black;
			Console.ForegroundColor = color;
			Console.WriteLine(message);
			// Restore the original foreground and background colors.
			Console.ResetColor();
		}
	}
}
